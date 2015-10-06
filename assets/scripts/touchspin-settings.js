
            $("input[name='demo1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });

            $("input[name='demo3']").TouchSpin();
     


    $("input[name='demo_vertical']").TouchSpin({
      verticalbuttons: true
    });

            $("input[name='demo2']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '$'
            });
   
            $("input[name='demo4']").TouchSpin({
                postfix: "A Button",
                postfix_extraclass: "btn btn-default"
            });
