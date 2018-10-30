<div class='modal fade' id='create-modal' area-hidden='true' tab-index='-1' role='dialog' aria-labelledby="create-book-label" style="font-size: 0.8125rem;">
        <div class='modal-dialog modal-lg' role='document'>
            <div class='modal-content'>
    
                <!-- Modal Header -->
                <div class='modal-header' style="background-color: #343a40; color: white;">
                    <h5 class="modal-title" id="create-book-label">Create Book</h4>
    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='color: white;'>
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <!-- Form -->
                <form method='post' class='form-horizontal' id='book-form' action={{ route('book.insert') }}>
    
                    @csrf
    
                    <!-- Modal Body -->
                    <div class='modal-body' style='text-align:left;'>
                        <!-- Title -->
                        <div class='form-group' style='border-bottom: 1px solid #d3d3d3'>
                            <div class='col-md-12 mb-3 p-0'>
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name='title' placeholder="Title" required>
                            </div>
                        </div>
    
                        <!-- Author -->
                        <div class='form-group' style='border-bottom: 1px solid #d3d3d3'>
                            <div class='col-md-12 mb-3 p-0'>
                                <label for="author">Author:</label>
                                <!-- Input Tags: https://github.com/Nodws/bootstrap4-tagsinput -->
                                <input type="text" class="form-control" id="author" name='author' placeholder="Authors" required data-role="tagsinput" >
                            </div>
                        </div>
    
                        <!-- ISBN -->
                        <div class='form-group' style='border-bottom: 1px solid #d3d3d3'>
                            <div class='col-md-12 mb-3 p-0'>
                                <label for="isbn">ISBN:</label>
                                <input type="text" class="form-control" id="isbn" name='isbn' placeholder="13-Digit ISBN" aria-describedby="fax" pattern="\d{13}" required>
                            </div>
                        </div> 
    
                        <!-- Publisher -->
                        <fieldset class='form-group' style='border-bottom: 1px solid #d3d3d3'>
                            <legend class='col-form-legend' style='font-size:inherit;'>Publisher Profile</legend>
                            <div class='form-row'>
                                <!-- Name -->
                                <div class='col-md-5 mb-3'>
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name='name' placeholder="Name" required>
                                </div>
                                <!-- Year: -->
                                <div class='col-md-3 mb-3'>
                                    <label for="year">Year:</label>
                                    <input type="text" class="form-control" id="year" name='year' placeholder="Year Published" pattern='^(19|20)\d{2}$' required>
                                </div>
                                <!-- City -->
                                <div class='col-md-4 mb-3'>
                                    <label for="city">City:</label>
                                    <input type="text" class="form-control" id="city" name='city' placeholder="City" required>
                                </div>
                            </div>
                        </fieldset>
    
                         <!-- Genre -->
                         <div class='form-group' style='border-bottom: 1px solid #d3d3d3'>
                            <div class='col-md-12 mb-3 p-0'>
                                <label for="genre">Genre:</label>
                                <input type="text" class="form-control" id="genre" name='genre' placeholder="Genre" required>
                            </div>
                        </div> 
    
                        <div class='form-group' style='border-bottom: 1px solid #d3d3d3'>
                            <div class='form-row'>
                                <!-- Format -->
                                <div class='col-md-4 mb-3'>
                                    <label for="format">Format:</label>
                                    <select required class='form-control'>
                                        <option value=''></option>
                                        <option value='paperback'>Paperback</option>
                                        <option value='hardcover'>Hardcover</option>
                                    </select>
                                </div>
                                <!-- Price -->
                                <div class='col-md-4 mb-3'>
                                    <label for="price">Price:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="euro">&euro;</span>
                                        </div>
                                        <input type="number" id='price' name='price' class="form-control" data-number-to-fixed="2" min="0.00" step="0.01" placeholder="0.00" aria-describedby="euro" required>
                                    </div>
                                </div>
                                <!-- Page -->
                                <div class='col-md-4 mb-3'>
                                    <label for="page">Page:</label>
                                    <input type="number" class="form-control" id="page" name='page' placeholder="Page Number" required min="0">
                                </div>
                            </div>
                        </div>
    
                        <!-- Description -->
                        <div class='form-group'>
                            <div class='col-md-12 mb-3 p-0'>
                                <label for="description">Description:</label>
                                <textarea class='form-control' id='description' name="description" rows='3' required minlength=10></textarea>
                            </div>
                        </div>
                    </div>
    
                    <!-- Modal Footer -->
                    <div class='modal-footer text-center'>
                        <button type='button' class='btn btn-sm btn-outline-danger' data-dismiss='modal'> <i class="far fa-trash-alt"></i> Cancel</button>
                        <button type='submit' class='btn btn-sm btn-outline-primary'> <i class="fas fa-plus-circle"></i> Create</button>
                    </div>
    
                </form>
    
            </div>
        </div>
    </div>