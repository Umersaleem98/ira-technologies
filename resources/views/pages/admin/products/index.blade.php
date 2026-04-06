@include('layouts.admin.head')
<title>Products index</title>

<body>
    <div class="wrapper">
        <!--
   Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
  -->
        @include('layouts.admin.header')
        @include('layouts.admin.sidebar')


        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Products</h4>

                    </div>

                    <div class="container mt-5">
                        <h2>Products List</h2>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <table class="table table-bordered table-hover mt-3">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Description</th>
                                    <th>Images</th>
                                    <th>Tags</th>
                                    <th>Rating</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <!-- Name -->
                                        <td>{{ $product->name }}</td>

                                        <!-- Brand -->
                                        <td>{{ $product->brand ? $product->brand->name : 'N/A' }}</td>

                                        <!-- Description -->
                                        <td>{{ Str::limit($product->description, 50) }}</td>

                                        <!-- Images -->
                                        <td>
                                            @php
                                                $images = !empty($product->images)
                                                    ? json_decode($product->images, true)
                                                    : [];
                                            @endphp

                                            @if (!empty($images) && is_array($images))
                                                @foreach ($images as $img)
                                                    <img src="{{ asset('templates/products/' . $img) }}" width="50"
                                                        class="img-thumbnail m-1">
                                                @endforeach
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        </td>

                                        <!-- Tags -->
                                        <td>{{ $product->tag ?? 'N/A' }}</td>

                                        <!-- Rating -->
                                        <td>
                                            @if ($product->rating)
                                                ⭐ {{ $product->rating }}
                                            @else
                                                N/A
                                            @endif
                                        </td>

                                        <!-- Actions -->
                                        <td>
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>

                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No products found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{ $products->appends(request()->query())->links('pagination::bootstrap-5') }}
                    </div>

                </div>
            </div>


        </div>


    </div>
    </div>
    @include('layouts.admin.script')
