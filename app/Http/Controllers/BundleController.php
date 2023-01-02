<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use App\Models\Product;
use App\Models\Section;
use App\Models\Setting;

use Illuminate\Http\Request;

class BundleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bundles = Bundle::with(['sections', 'settings'])->get();
        return response()->json($bundles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bundle = new Bundle;
        $bundle->user_id = 1;
        $bundle->bundle_name = $request->get('bundle_name');
        $bundle->product_name = $request->get('product_name');
        $bundle->bundle_type = $request->get('bundle_type');
        $bundle->discount_type = $request->get('discount_type');
        $bundle->type_off = $request->get('type_off');
        $bundle->discount_value = $request->get('discount_value');
        if($bundle->save()){
            foreach($request->get('sections') as $k => $v) {
                $section = new Section;
                $section->name = $v['title'];
                $section->description = $v['desc'];
                $section->save();
                $bundle->sections()->attach($section);

                foreach($v['items'] as $i => $item) {
                    $prod_id = explode('Product/', $item['id']);
                    $product_id = $prod_id[1];

                    $product = new Product;
                    $product->product_id = $product_id;
                    $product->title = $item['title'];
                    $product->handle = $item['handle'];
                    $product->image = $item['images'][0]['originalSrc'];
                    $product->save();
                    $section->products()->attach($product);
                }    
            }

            $setting = new Setting([
                'product_image' => $request->get('settings')['product_image'],
                'header_image' => $request->get('settings')['header_image'],
                'add_note_field' => $request->get('settings')['add_note_field'],
                'show_bundle_desc' => $request->get('settings')['show_bundle_desc'],
                'show_product_desc' => $request->get('settings')['show_product_desc'],
            ]);
            $setting->save();
            $bundle->settings()->attach($setting);
        }

        $bundles = Bundle::get();
        return response()->json($bundles); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bundle  $bundle
     * @return \Illuminate\Http\Response
     */
    public function show(bundle $bundle)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bundle  $bundle
     * @return \Illuminate\Http\Response
     */
    public function edit(bundle $bundle)
    {
        logger('edit----'.$bundle);
        $show_bundle = Bundle::where('id', $bundle->id)->with(['sections', 'settings'])->first();
        return response()->json($show_bundle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bundle  $bundle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bundle $bundle)
    {
        $update_bundle = Bundle::find($bundle->id);
        $update_bundle->update($request->all());
 
        return response()->json('The bundle successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bundle  $bundle
     * @return \Illuminate\Http\Response
     */
    public function destroy(bundle $bundle)
    {
        $bundle = Bundle::find($bundle->id);
        $bundle->delete();
 
        return response()->json('The bundle successfully deleted');
    }
}
