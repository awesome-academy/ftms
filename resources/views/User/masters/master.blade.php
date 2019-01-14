<!DOCTYPE html>
<html lang="en">
<head>
    <!--========= Basic Page Needs =========-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--========== Specific Meta ==========-->
    <meta name="description" content="Online Education template Based on HTML5.">
    <meta name="keywords" content="HTML5, Template, Design, Development, education, edulab, online cources, training, online education, best education template">
    <!--======== Page Title===========-->
    <title>@lang('home.title')</title>
    <!--========== Favicons =========-->
    <!--====== Custom CSS for themes =======-->
    {{ Html::style(asset('css/style.css')) }}
    {{ Html::style(asset('css/font-awesome.min.css')) }}
    {{ Html::style(asset('css/themify-icons.css')) }}
    {{ Html::style(asset('css/plugins.css')) }}
    {{ Html::style(asset('css/app.css')) }}
    {{ Html::style(asset('css/custom.css')) }}
    {{ Html::style(asset('css/timeLine.css')) }}
    {{ Html::script(asset('js/modernizr-2.8.3.min.js')) }}

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://skywalkapps.github.io/bootstrap-notifications/stylesheets/bootstrap-notifications.css">

</head>
<body>
    <!-- HEADER section -->
    @include('User.headers.header')
    <!-- END HEADER section -->
    @yield('content')
    <!-- FOOTER section -->
    @include('User.footers.footer')
    <!-- END FOOTER section -->
    <!-- jQuery Latest Version -->
    {{ Html::script(asset('js/app.js')) }}
    {{ Html::script(asset('js/popper.min.js')) }}
    {{ Html::script(asset('js/bootstrap.min.js')) }}
    {{ Html::script(asset('js/plugins.js')) }}
    {{ Html::script(asset('js/main.js')) }}
    {{ Html::script(asset('js/custom.js')) }}
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
