<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Việt Nam HGIS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link href="{!! asset('css/index.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{!! asset('css/normalize.css') !!}" />
        <link rel="stylesheet" href="{!! asset('css/ion.rangeSlider.css') !!}" />
        <link rel="stylesheet" href="{!! asset('css/ion.rangeSlider.skinModern.css') !!}" />
        <script type="text/javascript" src="{!! asset('js/ion.rangeSlider.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/clipper.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/moment.js') !!}"></script>
    </head>
    <body class="container">
        <div id='app' class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <form class="input-group input-group-sm" v-on:submit.prevent="goToTime">
                        <input type="date" v-model="time" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-group-sm" type="submit">Search</button>
                        </span>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form class="input-group input-group-sm" >
                        <span>Time unit: </span>
                        <input type="radio" name="range" value="1" v-model="size" checked> Year
                        <input type="radio" name="range" value="2" v-model="size"> Month
                        <input type="radio" name="range" value="3" v-model="size"> Day
                    </form>
                </div>
            </div>
            <div id="range-box">
                <input type="text" id="range" value="" name="range" />
            </div>
            <vhgis-map prefix="{{url('/')}}"></vhgis-map>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#range").ionRangeSlider({
                    type: "single",
                    grid: true,
                    // min: -83570400000000,
                    min: 162838800000,
                    // max: 1425279600000,
                    max: 168109200000,
                    from: 168048000000,
                    step: 86400,                // 5 minutes
                    prettify: function (num) {
                        return moment(num, 'x').format("YYYY-MM-DD");
                    },
                    prefix: "Năm ",
                    onFinish: function (data) {
                        console.log("Finish");
                        changeTime(data);
                    }
                }); 
                var range = $("#range").data("ionRangeSlider");
                window.addEventListener('changeTimeFromInput', function (e) {
                    range.update({
                        from: e.detail
                    });
                });
            });
        </script>
    </body>
    <script src="{!! asset('js/gmaps.js') !!}"></script>
    <script src="{!! asset('js/index.js') !!}"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIYT9M9AonS4GeJ5Zz1tjqOm8kjDXsIsI&callback=initMap">
    </script>
</html>
