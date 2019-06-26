@extends('layouts.main')

@section('content')

    <!--main content wrapper-->
    <div class="content-wrapper">
    <div class="container-fluid">
    
         <div class="row">
            <div class="col-md-4">
                <div class="row">

                @foreach ($categories as $category)

                    <div class="col-md-4">

                        <button class="btn btn-info undo" id="{{ $category->id }}">{{ $category->name }}</button>
                    </div>
                    @endforeach
                    
                </div>
            </div>
             <!--row2-->
                <div class="row">

                    <ul id="categoryItemsList"class="list-unstyled mb-0 list-widget">
                                        
                                                                            
                                      
                                    </ul>
                                    </div>
                    
            <!--row2End-->
        </div>
</div>

@endsection

<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>

<script type="text/javascript">
 $("undo").on("click", function(e){
     e.preventDefault()
     var requested_to = $(this).attr("id");
     fetchItems(requested_to);

 });

        function fetchItems(id) {
        $.ajax({
            url: "/pos/"+id,
            type: "GET",
            dataType: "json",
       }).done(function (data) {

               // $("#loadCategoryItems li").empty(); // Empty <li>
                $.each(data, function (k, v) {
                    for (var key in v) {
                         var tr_str = "<li>"
                            "<div class='media mb-4'>" +
                                "<div class='media-body list-widget-border'>" +
                                    "<div class='float-left'>" +
                                        "<h6 class='text-uppercase mb-0'>" + v[key].name + "</h6>" +
                                        "<span class='text-muted'>" + v[key].name + "</span>" +
                                    "</div>" +
                                    "<div class='float-right'>" +
                                        "<strong>" +v[key].name + "</strong>" +
                                    "</div>" +
                                "</div>" +
                            "</div>" +
                        "</li>";  
                        $("#categoryItemsList").append(tr_str);
                    }
                });

             });

    }


</script>
        

    



    