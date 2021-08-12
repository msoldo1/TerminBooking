<div class="form-group">
    <label for="typeOfCar">Datum:</label>
    <input type="date" name="datum" class="form-control" value="{{ old('datum') ?? $termin->datum }}">
    <div class="alert-danger">{{ $errors->first('datum') }}</div>
</div>

<div class="form-group">
    <label for="pocetak" >Početak termina:</label>
    <input type="time" name="pocetak" class="form-control" value="{{ old('pocetak') ?? $termin->pocetak }}">
    <div class="alert-danger">{{ $errors->first("pocetak") }}</div>
</div>

<div class="form-group">
    <label for="kraj" >Kraj termina:</label>
    <input type="time" name="kraj" class="form-control" value="{{ old('kraj') ?? $termin->kraj }}">
    <div class="alert-danger">{{ $errors->first("kraj") }}</div>
</div>

<div class="form-group" >
    <div class="row">
        <div class="col">
            <label for="dvorana_id">Dvorane:</label>
            <select name="dvorana_id" id="dvorana_id" class="form-control">
                @foreach($dvorane as $dvorana)
                    <option value="{{ $dvorana->id }}">{{ $dvorana->naziv }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>




