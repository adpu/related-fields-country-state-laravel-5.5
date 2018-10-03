<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
   
</head>
<body>
            <form method="POST" role="form" class="form-reservation"  action="/checkout">
                {{csrf_field()}}

               
                
                    <label>Country</label>
                    <select class="form-control-select" name="billing_country" >
                        <option value="">Select country</option>
                        @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                
                    <label>Province</label>
                    <select class="form-control-select" name="billing_province">
                        <option value="">Select state</option>
                        <option>--State--</option>
                    </select>
                
                

                @if ($errors->any())
                   
                        @foreach ($errors->all() as $error)
                            <div class="error">{{ $error }}</div>
                        @endforeach
                    
                @endif
                <input type="submit" class="button-generic" value="Checkout">
            </form>
        

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
   
      $('select[name="billing_country"]').on('change', function(){
            var countryId = $(this).val();
            if(countryId) {
                $.ajax({
                    url: '/getstate/'+countryId,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {

                        $('select[name="billing_province"]').empty();

                        $.each(data, function(key, value){

                            $('select[name="billing_province"]').append('<option value="'+ key +'">' + value + '</option>');

                        });
                    }
                });
            } else {
                $('select[name="billing_province"]').empty();
            }

        });
        

    });
</script>
</body>
</html>