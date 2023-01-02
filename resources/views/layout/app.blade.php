<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>{{ \Osiset\ShopifyApp\Util::getShopifyConfig('app_name') }}</title>
    <!-- <link rel="stylesheet" type="text/css" href="https://sdks.shopifycdn.com/polaris/2.3.1/polaris.min.css"> -->
    <link
  rel="stylesheet"
  href="https://unpkg.com/@shopify/polaris@10.16.1/build/esm/styles.css"
/>
    @yield('styles')
    
</head>

<body>
    <div class="app-wrapper">
        <div class="app-content">
            <main role="main">
                <div class="Polaris-Page Polaris-Page--fullWidth">
                @yield('content')
                </div>
            </main>
        </div>
    </div>
    
    @if(\Osiset\ShopifyApp\Util::getShopifyConfig('appbridge_enabled') && \Osiset\ShopifyApp\Util::useNativeAppBridge())
        <script src="https://unpkg.com/@shopify/app-bridge{{ \Osiset\ShopifyApp\Util::getShopifyConfig('appbridge_version') ? '@'.config('shopify-app.appbridge_version') : '' }}"></script>
        <script src="https://unpkg.com/@shopify/app-bridge-utils{{ \Osiset\ShopifyApp\Util::getShopifyConfig('appbridge_version') ? '@'.config('shopify-app.appbridge_version') : '' }}"></script>
        <script
            @if(\Osiset\ShopifyApp\Util::getShopifyConfig('turbo_enabled'))
                data-turbolinks-eval="false"
            @endif
        >
            var AppBridge = window['app-bridge'];
            var actions = AppBridge.actions;
            var utils = window['app-bridge-utils'];
            var createApp = AppBridge.default;
            var app = createApp({
                apiKey: "{{ \Osiset\ShopifyApp\Util::getShopifyConfig('api_key', $shopDomain ?? Auth::user()->name ) }}",
                shopOrigin: "{{ $shopDomain ?? Auth::user()->name }}",
                host: "{{ \Request::get('host') }}",
                forceRedirect: true,
            });
        </script>

        @include('shopify-app::partials.token_handler')
        @include('shopify-app::partials.flash_messages')
    @endif

    @yield('scripts')
</body>

</html>