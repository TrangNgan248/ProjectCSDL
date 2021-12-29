{{-- t đ nghĩ ra tên cho cái file nên đặt tạm ntn nhé --}}
@extends('frontend.layouts.master')

@section('title')
<title>Home</title>
@endsection
@section('content')
<section class="section wb">
    <div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="page-wrapper">

                <ol class="breadcrumb hidden-xs-down" style="text-align: left">
                    <li class="breadcrumb-item"><a href="#">Tên_Tài_Khoản</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#"></a></li> --}}
                    <li class="breadcrumb-item active">Đăng_Bài</li>
                </ol>
                <form action="" id="post_a_status">
                    <div class="mb-3 mt-3">
                      <label for="heading">Tiêu đề :</label>
                      <input type="text" placeholder="Nhập tiêu đề" name="heading" id="heading" class="form-control mt-2 mb-3">
                      <label for="category">Chủ đề :</label>
                      <div class="form-floating mb-3 mt-2">
                        <select class="form-select" id="category" name="category" style="height: 38px">
                          <option value="1">Tiếng Nhật</option>
                          <option value="2">Kiến thức IT</option>
                          <option value="3">Chia sẻ kinh nghiệm học</option>
                          <option value="4">Chia sẻ tài liệu</option>
                          <option value="5">Khác..</option>
                        </select>
                        {{-- <label for="sel1" class="form-label"></label> --}}
                      </div>
                      <label for="picture">Thêm ảnh hoặc video :</label>
                      <input type= "file" placeholder="..." name="file" class="form-control mt-2 mb-3">
                      <label for="post-content">Nội dung :</label>
                      <textarea placeholder="Nhập nội dung ..." class="form-control" rows="5" id="post-content" name="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>

function submit_form(){
    $('#post_a_status').on('submit', function (event){
        event.preventDefault();
        axios.post('/web-api/blog', {
        blog_heading: $('#heading').val(),
        blog_content: $('#post-content').val(),
        cat_id: $('#category').val(),
        blog_display : "abcxyz",
})
    })
}
    </script>
</section>


@endsection