@extends('layout.app')

@section('styles')
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
@endsection

@section('content')
    <div id="app">
        <!-- <div id="nav">
            <router-link to="/">Builders</router-link> | 
            <router-link to="/bundle/create">Create</router-link>
        </div> -->
        
        <router-view></router-view>
        <!-- <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p> -->
    </div>
    
@endsection

@section('scripts')
    @parent
    
    <script>
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        const ResourcePicker = actions.ResourcePicker;

        const productPicker = ResourcePicker.create(app, {
            resourceType: ResourcePicker.ResourceType.Product,
            options: {
              selectMultiple: true,
              showVariants: false,
              showHidden: false,
            },
        });

        console.log('blade file');
        window.products = [];
        productPicker.subscribe(ResourcePicker.Action.SELECT, (item) => {
            window.products = [];
          item.selection.map(function(obj){
            // obj.image = obj.images[0]?.originalSrc;
            products.push(obj); console.log('win--', window.products);
          });
        });

        productPicker.subscribe(ResourcePicker.Action.CANCEL, () => {
          // Picker was cancelled
        });

        const createButton = Button.create(app, { label: 'Create Builder' });
        createButton.subscribe('click', () => {
          app.dispatch(Redirect.toApp({ path: '/create' }));
        });

        // const titleBarOptions = {
        //   title: 'My Builders',
        //   buttons: {
        //     primary: createButton,
        //     secondary: [createButton],
        //   },
        // };

        // TitleBar.create(app, titleBarOptions);
    </script>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
@endsection