<div class="form-group {{ $errors->has('namaBus') ? 'has-error' : ''}}">
    <label for="namaBus" class="col-md-4 control-label">{{ 'Namabus' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="namaBus" type="text" id="namaBus" value="{{ $bus->namaBus or ''}}" >
        {!! $errors->first('namaBus', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('tipeBus') ? 'has-error' : ''}}">
    <label for="tipeBus" class="col-md-4 control-label">{{ 'Tipebus' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tipeBus" type="text" id="tipeBus" value="{{ $bus->tipeBus or ''}}" >
        {!! $errors->first('tipeBus', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('jumlahKursi') ? 'has-error' : ''}}">
    <label for="jumlahKursi" class="col-md-4 control-label">{{ 'Jumlahkursi' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="jumlahKursi" type="number" id="jumlahKursi" value="{{ $bus->jumlahKursi or ''}}" >
        {!! $errors->first('jumlahKursi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('hargaSewa') ? 'has-error' : ''}}">
    <label for="hargaSewa" class="col-md-4 control-label">{{ 'Hargasewa' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="hargaSewa" type="number" id="hargaSewa" value="{{ $bus->hargaSewa or ''}}" >
        {!! $errors->first('hargaSewa', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
