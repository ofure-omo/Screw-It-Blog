
            $(document).ready(function () {
                $('#add_comment').on('click', function () {
                    var comment = $('#main_comment').val();
                    if (comment !== " ") {
                        $.ajax({
                            url: 'pagetorun.php?controller=blog&action=read&blog_id=',
                            method: 'POST',
                            dataType: 'text',
                            data: {
                                add_comment: 1,
                                comment: comment
                            }, sucesss: function (response) {
                                console.log(response);
                            }
                        });
                    } else
                        alert('check your inputs please');

                });
            });
