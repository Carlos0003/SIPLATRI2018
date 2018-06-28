@include('layouts.navbar')
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
    <script>
        $(document).ready(function(){
            @if(session('status'))
                swal('Felicitaciones!', '{{ session('status') }}', 'seccess');
            @endif
            $('form').on('click','.btn-upload', function(event){
                event.preventDefault();
                $(this).prev().click();
            });
            //*eliminar-
            $('table').on('click','.btn-delete', function(event){
                event.preventDefault();
                swal({
                    title:'Está Seguro?',
                    text:'Realmente desea eliminar este registro?',
                    type:'warning',
                    showCancelButton:true,
                    cancelButtonColor:'#d33'
                }).then((result)=>{
                    if(result.value){
                        $(this).parent().submit();
                    }
                });
            });
            $('form').on('keyup','#usearch', function(event) {
                event.preventDefault();
                $fullname=$(this).val();
                $.get('users/ajaxsearch',{fullname:$fullname}, function(data){
                    $('.results').html(data);
                });
            });
            // $('form').on('keyup','#asearch', function(event) {
            //     event.preventDefault();
            //     $name=$(this).val();
            //     $.get('articles/ajaxsearch',{name:$name}, function(data){
            //         $('.results').html(data);
            //     });
            // });
        });
    </script>
</body>
</html>
