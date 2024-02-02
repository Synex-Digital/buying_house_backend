@extends('backend.master')
@section('content')
<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Category & Subcategory List</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    {{-- <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text"
                                                    placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div> --}}
                                </div>
                                <div class="add_button ms-2">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#addcategory" class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table mb_30">

                            <table class="table lms_table_active3 ">
                                <thead>
                                    <tr>
                                        <th scope="col">Parent Category</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    {{-- @php
                                        $new_products = DB::table('categories')->where('parent_category_id', $category->id)->get();
                                    @endphp --}}
                                    <tr>
                                        <th scope="row"> <a href="#" class="question_content">{{ $category->parentcategory != null ? $category->parentcategory->category_name : 'Default' }}</a></th>
                                        <td>{{ $category->category_name }}</td>
                                        <td>
                                            <span class="badge {{ $category->status == 'active' ? 'bg-success' : 'bg-danger' }} ">{{ $category->status }}</span>
                                        </td>
                                        <td>
                                            <div class="header_more_tool">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle"
                                                        id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton"
                                                        x-placement="bottom-end"
                                                        style="position: absolute; transform: translate3d(-148px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <button class="dropdown-item editbtn editcategory" id="edit" data-id="{{ $category->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#editcategory"> <i
                                                                class="ti-eye"></i> View</button>
                                                        <a class="dropdown-item" href="{{ route('category.delete', ['id'=>$category->id]) }}"> <i
                                                                class="ti-trash"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- add category modal start --}}
<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Parent Category</label>
                        <select class="form-select" name="parent_category">
                            <option selected value="">Choose...</option>
                            @foreach ($categories as $category)
                             <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                            email with anyone else.</small> --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Category Name" name="category_name">
                        @error('email')
                        <small id="emailHelp" class="form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="active">Active</option>
                            <option value="deactive">Deactive</option>
                        </select>
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                            email with anyone else.</small> --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="editcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body" id="modal_body">
                   
                </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- add category modal end --}}
@section('script')
<script>
    $('body').on('click', '#edit', function() {
        let category_id = $(this).data('id');
        $.get("category/show/" + category_id, function(data) {
            console.log(category_id);
            $('#modal_body').html(data);
        });
    });
</script>


    {{-- <script>
        $(document).ready(function(){
            $(document).on('click', '.editbtn', function(){
                var category_id = $(this).val();
                alert(category_id);
            //    $('#editcategory').modal('show');

               $.ajax({
                type: "GET",
                url: "/category/show/"+class_id,
                success: function(response){
                    console.log(response);
                    // $('#title').val(response.title);
                    // $('#start_time').val(response.start_time);
                    // $('#end_time').val(response.end_time);
                    // $('#note').val(response.note);
                    // $('#id').val(response.id);
                }
               });
            })
        })
    </script> --}}
@endsection