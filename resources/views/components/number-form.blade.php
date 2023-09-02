<div>
  <div class="card">
    <div class="card-header">
      NumberFormatter Form
    </div>
    <div class="card-body">
      <form action="{{ route('number.format') }}" method="GET">
        <div class="form-group">
          <label for="enter_number">Enter Any Number:</label>
          <input class="form-control" required autofocus type="number" name="num" step=".0001" value="{{ old('num') }}">
        </div>
        <div class="form-group">
          <label for="">Select Format:</label>
          <select class="form-control" name="num_format" required>
            <option value="currency" selected>With Currency Sign</option>
            <option value="decimal">Without Currency Sign</option>
            <option value="percent">Percentage</option>
            <option value="spellout">Convert To Letters</option>
            <option value="padding">Make It Shorter (e.g., output... 15.48K</option>
          </select>
        </div>
        <div class="form-group">
          <label for="precision">Decimal Points:</label>
          <select class="form-control" name="precision" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2" selected>2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
        <div class="form-group">
          <label for="select_currency">Currency:</label>
          <select class="form-control" name="currency" required>
            <option value="USD" selected>USD</option>
            <option value="EUR">EUR</option>
            <option value="PHP">PHP</option>
            <option value="JPY">JPY</option>
          </select>
        </div>
        <div class="form-group">
          <label for="commas">Include Commas:</label>
          <select class="form-control" name="commas" required>
            <option value="true" selected>Yes</option>
            <option value="false">No</option>
          </select>
        </div>
        <div class="form-group">
          <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>