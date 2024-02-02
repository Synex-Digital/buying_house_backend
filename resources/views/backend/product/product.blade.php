@extends('backend.master')
@section('content')
<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Product List</h4>
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
                                    <a href="{{ route('product.add') }}" class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table mb_30">

                            <table class="table lms_table_active3 ">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            @foreach ($product->thumbnail as $image)
                                            <img class="" width="50" height="50" src="{{ asset('images/product/' . $image->images) }}" alt="">
                                            @endforeach
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->parent_category->category_name }} / {{ $product->category? $product->category->category_name : '' }}</td>
                                        <td>
                                            <span class="badge {{ $product->status == 'active' ? 'bg-success' : 'bg-danger' }} ">{{ $product->status }}</span>
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
                                                        <a href="{{ route('product.show', ['id'=>$product->id]) }}" class="dropdown-item " id="edit"> <i
                                                                class="ti-eye"></i> View</a>
                                                        <a class="dropdown-item" href="{{ route('product.delete', ['id'=>$product->id]) }}"> <i
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
