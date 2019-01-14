<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{ Html::style(asset('css/app.css')) }}
    {{ Html::style(asset('css/font-awesome.min.css')) }}
    {{ Html::style(asset('css/themify-icons.css')) }}
    {{ Html::style(asset('css/metisMenu.css')) }}
    {{ Html::style(asset('css/owl.carousel.min.css')) }}
    {{ Html::style(asset('css/slicknav.min.css')) }}
    {{ Html::style(asset('css/typography.css')) }}
    {{ Html::style(asset('css/default-css.css')) }}
    {{ Html::style(asset('css/admin/styles.css')) }}
    {{ Html::style(asset('css/admin/responsive.css')) }}
    {{ Html::style(asset('css/notify.css')) }}
    {{ Html::script(asset('js/modernizr-2.8.3.min.js')) }}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <div class="sidebar-menu">
            @include('admin.layout.sidebar.sidebar')
        </div>
        <div class="main-content">
            <div class="header-area">
                @include('admin.layout.header.header')
            </div>
            <div class="page-title-area">
                @include('admin.layout.user_profile.user_profile')
            </div>
            <div class="main-content-inner">
                @yield('main-content')
            </div>
        </div>
        @include('admin.layout.footer.footer')
    </div>
    <div class="offset-area">
        @include('admin.layout.offset.offset')
    </div>
    {{ Html::script(asset('js/app.js')) }}
    {{ Html::script(asset('js/popper.min.js')) }}
    {{ Html::script(asset('js/bootstrap.min.js')) }}
    {{ Html::script(asset('js/owl.carousel.min.js')) }}
    {{ Html::script(asset('js/metisMenu.min.js')) }}
    {{ Html::script(asset('js/jquery.slimscroll.min.js')) }}
    {{ Html::script(asset('js/jquery.slicknav.min.js')) }}
    {{ Html::script(asset('js/plugins.js')) }}
    {{ Html::script(asset('js/scripts.js')) }}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        var notificationsWrapper   = $('.dropdown-notifications');
        var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('i[data-count]');
        var notificationsCount     = parseInt(notificationsCountElem.data('count'));
        var notifications          = notificationsWrapper.find('ul.dropdown-menu');
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}',{cluster: 'ap1',
            encrypted: true
        });
        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('Notify');
        // Bind a function to a Event (the full Laravel class)
        channel.bind('send-message', function(data) {
            var existingNotifications = notifications.html();
            var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
            var newNotificationHtml = `
              <li class="notification active">
                  <div class="media">
                    <div class="media-left">
                      <div class="media-object">
                        <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                      </div>
                    </div>
                    <div class="media-body">
                      <strong class="notification-title">`+data.title+`</strong>
                      <p class="notification-desc">`+data.content+`</p>
                      <div class="notification-meta">
                        <small class="timestamp">about a minute ago</small>
                      </div>
                    </div>
                  </div>
              </li>
            `;
            notifications.html(newNotificationHtml + existingNotifications);

            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
        });
    </script>
</body>
</html>
