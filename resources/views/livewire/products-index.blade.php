<div class="card-body">
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="ModalProduct" tabindex="-1" role="dialog" aria-labelledby="ModalProductTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalProductTitle">New product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <label for="CODE">External ID</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-external-link-square-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" wire:model="CODE" name="CODE" id="CODE" placeholder="External ID">
                                </div>
                                @error('CODE') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <label for="LABEL">Description</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-tags"></i></span>
                                    </div>
                                    <input type="text" class="form-control" wire:model="LABEL" name="LABEL"  id="LABEL" placeholder="Label/Desciption of product">
                                </div>
                                @error('LABEL') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <label for="IND">Index</label>
                                <input type="text" class="form-control"  wire:model="IND" name="IND"  id="IND" placeholder="Index">
                                @error('IND') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <label for="methods_services_id">Services</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-list"></i></span>
                                    </div>
                                    <select class="form-control" wire:model="methods_services_id" name="methods_services_id" id="methods_services_id">
                                    @forelse ($ServicesSelect as $item)
                                    <option value="{{ $item->id }}">{{ $item->LABEL }}</option>
                                    @empty
                                        <option value="">No service, go to methods page for add</option>
                                    @endforelse
                                    </select>
                                </div>
                                @error('methods_services_id') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <label for="methods_families_id">Family</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-grip-horizontal"></i></span>
                                    </div>
                                    <select class="form-control" wire:model="methods_families_id" name="methods_families_id" id="methods_families_id">
                                    @forelse ($FamiliesSelect as $item)
                                    <option value="{{ $item->id }}">{{ $item->LABEL }}</option>
                                    @empty
                                        <option value="">No families, go to methods page for add</option>
                                    @endforelse
                                    </select>
                                </div>
                                @error('methods_families_id') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <label for="methods_units_id">Unit</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-ruler"></i></span>
                                    </div>
                                    <select class="form-control" wire:model="methods_units_id" name="methods_units_id" id="methods_units_id">
                                    @forelse ($UnitsSelect as $item)
                                    <option value="{{ $item->id }}">{{ $item->LABEL }}</option>
                                    @empty
                                        <option value="">No units, go to methods page for add</option>
                                    @endforelse
                                    </select>
                                </div>
                                @error('methods_units_id') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <label for="purchased">Purchased</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-exclamation"></i></span>
                                    </div>
                                    <select class="form-control" wire:model="purchased" name="purchased" id="purchased">
                                        <option value="2">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                                @error('purchased') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <label for="sold">Sold</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-exclamation"></i></span>
                                    </div>
                                    <select class="form-control" wire:model="sold" name="sold" id="sold">
                                        <option value="2">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                                @error('sold') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <label for="tracability_type">Tracability</label>
                                <select class="form-control" wire:model="tracability_type" name="tracability_type" id="tracability_type">
                                    <option value="1">No traceability</option>
                                    <option value="2">With batch number</option>
                                    <option value="3">With serial number</option>
                                </select>
                                @error('tracability_type') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">{{ $Factory->curency }}</span>
                                    </div>
                                    <input type="number" class="form-control" wire:model="purchased_price" name="purchased_price" id="purchased_price" placeholder="Purchased price" step=".001">
                                </div>
                                @error('purchased_price') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">{{ $Factory->curency }}</span>
                                    </div>
                                    <input type="number" class="form-control" wire:model="selling_price" name="selling_price" id="selling_price" placeholder="Selling price" step=".001">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label for="material">Proprieties</label>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-mdb"></i></span>
                                    </div>
                                    <input type="text" class="form-control" wire:model="material" name="material" id="material" placeholder="Material">
                                </div>
                                @error('material') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-ruler-vertical"></i></span>
                                    </div>
                                    <input type="number" class="form-control" wire:model="thickness" name="thickness" id="thickness" placeholder="Thickness" step=".001">
                                </div>
                                @error('thickness') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-weight-hanging"></i></span>
                                    </div>
                                    <input type="number" class="form-control" wire:model="weight" name="weight" id="weight" placeholder="Weight" step=".001">
                                </div>
                                @error('weight') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <label for="x_size">X</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-ruler-combined"></i></span>
                                    </div>
                                    <input type="number" class="form-control" wire:model="x_size" name="x_size" id="x_size" placeholder="X size" step=".001">
                                </div>
                                @error('x_size') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <label for="y_size">Y</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-ruler-combined"></i></span>
                                    </div>
                                    <input type="number" class="form-control" wire:model="y_size" name="y_size" id="y_size" placeholder="Y size" step=".001">
                                </div>
                                @error('y_size') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <label for="z_size">Z</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-ruler-combined"></i></span>
                                    </div>
                                    <input type="number" class="form-control" wire:model="z_size" name="z_size" id="z_size" placeholder="Z size" step=".001">
                                </div>
                                @error('z_size') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-ruler-combined"></i></span>
                                    </div>
                                    <input type="number" class="form-control" wire:model="x_oversize" name="x_oversize" id="x_oversize" placeholder="X oversize" step=".001">
                                </div>
                                @error('x_oversize') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-ruler-combined"></i></span>
                                    </div>
                                    <input type="number" class="form-control" wire:model="y_oversize" name="y_oversize" id="y_oversize" placeholder="Y oversize" step=".001">
                                </div>
                                @error('diameter') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-ruler-combined"></i></span>
                                    </div>
                                    <input type="number" class="form-control" wire:model="z_oversize" name="z_oversize" id="z_oversize" placeholder="Z oversize" step=".001">
                                </div>
                                @error('diameter') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <input type="number" class="form-control" wire:model="diameter" name="diameter" id="diameter" placeholder="Diameter" step=".001">
                                @error('diameter') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <input type="number" class="form-control" wire:model="diameter_oversize" name="diameter_oversize" id="diameter_oversize" placeholder="Diameter_oversize" step=".001">
                                @error('diameter_oversize') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <input type="number" class="form-control" wire:model="section_size" name="section_size" id="section_size" placeholder="Section size" step=".001">
                                @error('section_size') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label for="qty_eco_min">Other information</label>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <input type="number" class="form-control" wire:model="qty_eco_min" name="qty_eco_min" id="qty_eco_min" placeholder="Qty eco min" step=".001">
                                @error('qty_eco_min') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <input type="number" class="form-control" wire:model="qty_eco_max" name="qty_eco_max" id="qty_eco_max" placeholder="Qty eco max" step=".001">
                                @error('qty_eco_max') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                            <div class="col-4">
                                <textarea class="form-control" rows="3"  wire:model="comment" name="comment"  placeholder="Comment ..."></textarea>
                                @error('comment') <span class="text-danger">{{ $message }}<br/></span>@enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label for="PICTURE">Logo file</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-image"></i></span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="PICTURE">
                                    <label class="custom-file-label" for="PICTURE">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="Submit" wire:click.prevent="storeProduct()" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <div class="card">
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search fa-fw"></i></span>
                </div>
                <input type="text" class="form-control" wire:model="search" placeholder="Search line">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            <a class="btn btn-secondary" wire:click.prevent="sortBy('CODE')" role="button" href="#">Code @include('include.sort-icon', ['field' => 'CODE'])</a>
                        </th>
                        <th>
                            <a class="btn btn-secondary" wire:click.prevent="sortBy('LABEL')" role="button" href="#">Label @include('include.sort-icon', ['field' => 'LABEL'])</a>
                        </th>
                        <th>Created At</th>
                        <th>Sold</th>
                        <th>Purchase</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($Products as $Product)
                    <tr>
                        <td>{{ $Product->CODE }}</td>
                        <td>{{ $Product->LABEL }}</td>
                        <td>{{ $Product->GetPrettyCreatedAttribute() }}</td>
                        <td>
                            @if($Product->sold == 1 )
                            <i class="fas fa-check-double"></i>
                            @else
                            <i class="fas fa-times"></i>
                            @endif
                        </td>
                        <td>
                            @if($Product->purchased == 1 )
                            <i class="fas fa-check"></i>
                            @else
                            <i class="fas fa-times"></i>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('products.show', ['id' => $Product->id])}}">
                                <i class="fas fa-folder"></i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Code</th>
                        <th>Label</th>
                        <th>Created At</th>
                        <th>Sold</th>
                        <th>Purchase</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        <!-- /.col-sm-12 -->
        </div>
    <!-- /.card -->
    </div>
<!-- /.card-body -->
</div>
