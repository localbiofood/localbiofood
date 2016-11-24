<div class="row">
    <div class="col-md-6">
        <div class="panel @if (session('productDelete') === null) panel-default @else panel-success @endif">
            <div class="panel-heading">
                Produktu tipi:
            </div>
            <div class="panel-body">
                <h1>Product types:</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-condensed">
                        <thead>
                        <tr>
                            <td>Produkts</td>
                            <td>Dzēst</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    {{$category->getAttribute('name')}}
                                </td>
                                <td>
                                    <a href="{{route('products::delete', ['id' => $category->getAttribute('id')])}}"><i class="fa fa-trash-o fa-lg"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel @if (session('productAdd') === null) panel-default @else panel-success @endif">
            <div class="panel-heading">
                Produktu tipi:
            </div>

            <div class="panel-body">
                <h1>Pievienot jaunu produkta tipu</h1>
                <form action="{{route('prodcat::add')}}" enctype='multipart/form-data' method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        <label for="region" class="col-md-2 control-label">Name:</label>
                        <div class="col-md-10">
                            <input type="text"
                                   class="form-control"
                                   id="name"
                                   name="name"
                                   value="{{array_get($data, 'name', '')}}"
                                   placeholder="Name...">
                            @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('image')) has-error @endif">
                        <label for="region" class="col-md-2 control-label">Image:</label>
                        <div class="col-md-10">
                            <input type="file"
                                   class="form-control"
                                   id="image"
                                   name="image"
                                   value="{{array_get($data, 'image', '')}}"
                                   placeholder="Image...">
                            @if ($errors->has('image'))
                                <span class="help-block">{{ $errors->first('image')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('description')) has-error @endif">
                        <label for="region" class="col-md-2 control-label">Neliels apraksts:</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">{{ $errors->first('description')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12" style="margin-left:10px">
                        	<div class="form-group">
                        		<input class="btn btn-primary" type="submit" value="Saglabāt">
                        		<a class="btn btn-default" href="#">Atcelt</a>
                        	</div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
