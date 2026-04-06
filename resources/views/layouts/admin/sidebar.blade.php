<!-- Sidebar -->
		<div class="sidebar">

			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="admins/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ Auth::user()->name }}
									<span class="user-level">{{ Auth::user()->role }}</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="{{route('dashboard')}}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="badge badge-count">5</span>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>

						</li>
						 <!-- Products Dropdown -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#products">
                        <i class="fas fa-layer-group"></i>
                        <p>Products</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="products">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('products.create') }}">
                                    <span class="sub-item">Add Product</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('products.index') }}">
                                    <span class="sub-item">Product List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Categories Dropdown -->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#categories">
                        <i class="fas fa-list"></i>
                        <p>Categories</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="categories">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('categories.create') }}">
                                    <span class="sub-item">Add Category</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('categories.index') }}">
                                    <span class="sub-item">Category List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
