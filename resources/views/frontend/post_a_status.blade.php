{{-- t đ nghĩ ra tên cho cái file nên đặt tạm ntn nhé --}}
@extends('frontend.layouts.master')

@section('title')
    <title>Let's post a blog</title>
@endsection
@section('content')

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <ol class="breadcrumb hidden-xs-down" style="text-align: left; font-size: 20px;">
                            <li class="breadcrumb-item"><a href="#">{{auth()->user()->user_name}}</a></li>
                            {{-- <li class="breadcrumb-item"><a href="#"></a></li> --}}
                            <li class="breadcrumb-item active">Đăng_Bài</li>
                        </ol>
                        <form id="post_a_status" class="needs-validation" onsubmit="submit_form(event)">
                            <div class="mb-3 mt-3">
                                <b><label for="heading">Tiêu đề :</label></b>
                                <input type="text" placeholder="Nhập tiêu đề" name="heading" id="heading"
                                       class="form-control mt-2 mb-3" required>
                                <label for="category">Chủ đề :</label>
                                <div class="form-floating mb-3 mt-2">
                                    <select class="form-select" id="category" name="category"
                                            style="height: 38px; margin : 1px">
                                        <option>Chọn chủ đề</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                        @endforeach 
                                    </select>
                                    {{-- <label for="sel1" class="form-label"></label> --}}
                                </div>
                                <label for="picture">Thêm 1 ảnh cho bài viết nào :</label>
                                <input type="text" placeholder="..." name="text" class="form-control mt-2 mb-3" id="picture">
                                <label for="description">Mô tả :</label>
                                <input type="text" placeholder="Nhập mô tả ngắn gọn ..." name="description" id="description"
                                       class="form-control mt-2 mb-3" required>
                                <label for="post-content">Nội dung :</label>
                                <textarea placeholder="Nhập nội dung ..." class="form-control mb-3 mt-2" rows="5"
                                          id="ckeditor1" name="ckeditor1" required></textarea>
                            </div>
                            <button type="submit" id="submit-btn" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
    function submit_form(event) {
                    event.preventDefault();
                    axios.post('/web-api/blog', {
                        blog_heading: $('#heading').val(),
                        blog_content: $('#ckeditor1').val(),
                        cat_id: $('#category').val(),
                        description: $('#description').val(),
                        blog_display: $('#picture').val(),
                    }).then(function (res) {
                        $('#submit-btn').attr('disabled', true);
                        if(confirm("Đăng bài thành công")) document.location = '/new-post/' + res.data.blog.id;
                    }).catch(function (e) {
                        console.log(e)
                    })
            }
    </script>
     <div class="dmtop">Scroll to Top</div>
</section>



@endsection
