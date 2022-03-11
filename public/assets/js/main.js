(function(b) {
    b(window);
    var f = b(document),
        g = b("body");
    b(function() {
        b(".todo--panel")
            .on("submit", "form", function(a) {
            a.preventDefault();
            a = b(this);
            var c = a.find(".create");

            let url = "http://127.0.0.1:8000/add";
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            $.ajax({
                url: "/add",
                // url: "{{ route('createTodo') }}",
                type: "post",
                data: {title: c.val()},
                success: function(request){
                    window.location.reload();
                    // console.log(request);
                },
                error: function(response){
                    console.log(response);
                },
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }).on("click", ".todo--remove", function(a) {
            a.preventDefault();
            var id = $(this).data('id');
            var c = b(this).parent("li");
                $.ajax({
                    url: "delete/"+id,
                    type: "post",
                    data: {title: c.val()},
                    success: function(request){
                        c.slideUp("slow", function() {
                            c.remove()
                        })
                    },
                    error: function(response){
                        console.log(response);
                    },
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
        })

        $(document).on("click", ".todo--edit", function () {
            var id = $(this).data('id');
            var content = $(this).data('todo');
            console.log(id);
            console.log(content);
            $(".modal-body #todoId").val(id);
            $(".modal-body #todocontent").val(content);
        });

        $(document).on("click", ".todo--label", function () {
        // $(".todo--label").off().on('click',function(){
            var checkbox = $(this).find('.todo--input');
        //     var text = $(this).find('.todo--text');
            // console.log(checkbox)
            // console.log(text.text());
            // console.log(text.data('id'));
            // var id = text.data('id');
            var id = $(this).data('id');
            console.log(checkbox.val())
            // if (checkbox.is(":checked")) {
                $.ajax({
                    url: "status/"+id,
                    type: "post",
                    data: {status: checkbox.is(':checked') ? 1 : 0},
                    success: function(request){
                        // text.addClass("checked");
                        window.location.reload();
                    },
                    error: function(response){
                        console.log(response);
                    },
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            // } else {
            //     $.ajax({
            //         url: "status/"+id,
            //         type: "post",
            //         data: {status: checkbox.val()},
            //         success: function(request){
            //             // $(".todo--text").removeClass("checked");
            //             window.location.reload();
            //         },
            //         error: function(response){
            //             console.log(response);
            //         },
            //         headers:{
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //     });
            // }
        });

        $('#update-Todo').on('submit', function(e){
            e.preventDefault();
            a = b(this);
            var id = a.find(".todoId").val();
            var todo_title = a.find(".edit-data").val();

            console.log(id);
            console.log(todo_title);
            $.ajax({
                url: "update/"+id,
                type: "post",
                data: {title: todo_title},
                success: function(request){
                    window.location.reload();
                },
                error: function(response){
                    console.log(response);
                },
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#exampleModalCenter').modal('toggle');
        });
    })
})(jQuery);
