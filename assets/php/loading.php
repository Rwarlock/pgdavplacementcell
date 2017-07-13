        <link href="ytLoad.jquery.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="jquery.transit.js"></script>

        <script type="text/javascript" src="ytLoad.jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var examples = {
                    basic: function() {
                        $.ytLoad();
                    },
                    manual: function() {
                        $.ytLoad({
                            registerAjaxHandlers: false
                        });
                        $.ytLoad('start');
                        $.ytLoad('complete');
                        $.ytLoad('error');
                    },
                    customDurations: function() {
                        $.ytLoad({
                            startPercentage: 50,
                            startDuration: 2000,
                            completeDuration: 500,
                            fadeDelay: 2000,
                            fadeDuration: 2000
                        });
                    },
                    setProgress: function() {
                        $.ytLoad({
                            registerAjaxHandlers: false
                        });
                        $.ytLoad('progress', 50);
                        alert($.ytLoad('progress'));
                        $.ytLoad('progress', 100);
                    },
                    callbacks: function() {
                        $.ytLoad({
                            onStart: function() {
                                alert('Started!');
                            },
                            onComplete: function() {
                                alert('Complete!');
                            }
                        });
                    },
                    multipleRequests: function() {
                        $.ytLoad();
                        for(i=0; i < 2000; i++) {
                            $('#ajaxContent').load('ajax.html');
                        }
                    }
                };
                $('#loadButton').click(function(){
                    $('#ajaxContent').load('ajax.html');
                });
                $('#usageType').change(function() {
                    $.ytLoad('destroy');
                    examples[$(this).val()]();
                });
                examples.basic();
            });
        </script>
        <style>
            body {
                margin: 0px;
                padding: 0px;
                background-color: #EBEBEB;
                border-bottom: 1px solid #e8e8e8;
            }
            #topBar {
                height: 25px;
                padding: 7px;
                padding-left: 15px;
                background-color: #F1F1F1;
            }
            #socialCodingButtons {
                float: right;
            }
            #ajaxContent {
                width: 800px;
                margin: auto;
                margin-top: 15px;
            }
        </style>