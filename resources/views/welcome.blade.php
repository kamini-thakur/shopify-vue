@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
@endsection

@section('scripts')
    @parent

    <script>
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;

        const createButton = Button.create(app, { label: 'Create Builder' });
        createButton.subscribe('click', () => {
          app.dispatch(Redirect.toApp({ path: '/create' }));
        });

        const titleBarOptions = {
          title: 'My Builders',
          buttons: {
            primary: createButton,
            secondary: [createButton],
          },
        };

        TitleBar.create(app, titleBarOptions);
    </script>
@endsection