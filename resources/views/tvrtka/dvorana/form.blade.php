<div class="form-group">
    <label for="typeOfCar">Naziv dvorane:</label>
    <input type="text" name="naziv" class="form-control" value="{{ old('naziv') ?? $dvorana->naziv }}">
    <div class="alert-danger">{{ $errors->first('naziv') }}</div>
</div>

<div class="form-group" >
    <div class="row">
        <div class="col">
            <label for="tip">Tip:</label>
            <select name="tip" id="tip" class="form-control">
                <option value="Tenis">Tenis</option>
                <option value="Nogomet">Nogomet</option>
                <option value="Kosarka">Kosarka</option>
            </select>
        </div>
    </div>
</div>



<div class="form-group">
    <label for="re_plate" >Maksimalni broj igraca:</label>
    <input type="text" name="max_igraci" class="form-control" value="{{ old('max_igraci') ?? $dvorana->max_igraci }}">
    <div class="alert-danger">{{ $errors->first("max_igraci") }}</div>
</div>
