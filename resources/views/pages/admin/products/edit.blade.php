</div>
@include('layouts.admin.head')
<title>Products edit</title>

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
                        <h4 class="page-title">Category</h4>

                    </div>

                    <div class="container mt-5">
                        <h2>Edit Product</h2>

                        <form action="{{ route('products.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $product->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Brand -->
                            <div class="mb-3">
                                <label class="form-label">Brand</label>
                                <select name="brand_id" class="form-control @error('brand_id') is-invalid @enderror"
                                    required>
                                    <option value="">-- Select Brand --</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" {{ old('brand_id', $product->brand_id) == $brand->id ? 'selected' : '' }}>
                                            {{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('brand_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    rows="4">{{ old('description', $product->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tags -->
                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <input type="text" name="tag" class="form-control @error('tag') is-invalid @enderror"
                                    value="{{ old('tag', $product->tag) }}" placeholder="comma separated tags">
                                @error('tag')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Rating -->
                            <div class="mb-3">
                                <label class="form-label">Rating</label>
                                <input type="number" name="rating"
                                    class="form-control @error('rating') is-invalid @enderror"
                                    value="{{ old('rating', $product->rating) }}" min="0" max="5" step="0.1">
                                @error('rating')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Current Images -->
                            @if ($product->images)
                                <div class="mb-3">
                                    <label class="form-label">Current Images</label><br>

                                    @foreach (json_decode($product->images) as $img)
                                        <img src="{{ asset('templates/products/' . $img) }}" width="100"
                                            class="img-thumbnail m-1">
                                    @endforeach
                                </div>
                            @endif

                            <!-- Upload New Images -->
                            <div class="mb-3">
                                <label class="form-label">Add More Images</label>
                                <input type="file" name="images[]"
                                    class="form-control @error('images') is-invalid @enderror" multiple
                                    accept="image/*">
                                @error('images')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>
    </div>
    @include('layouts.admin.script')