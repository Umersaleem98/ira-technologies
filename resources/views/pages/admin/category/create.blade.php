@include('layouts.admin.head')
<title>Category index</title>
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
    <h2>Create Category</h2>
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Category Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Enter category name" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Category Image -->
        <div class="mb-3">
            <label for="image" class="form-label">Category Image</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" accept="image/*">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Is Active -->
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active" checked>
            <label class="form-check-label" for="is_active">
                Active
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
</div>

				</div>
			</div>


		</div>


	</div>
</div>
@include('layouts.admin.script')
