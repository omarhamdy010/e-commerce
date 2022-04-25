<div class="form-group">
    <label>parent category</label>
        <select class="form-control select2 parcatajax" id="catnameajax"
            name="parent_id"  style="width: 100%;">
                <option selected="selected" value={{0}} >select category</option>
            @foreach($parentcategories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
</div>
