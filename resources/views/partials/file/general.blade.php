<div id="general" class="tabcontent">
  <div class="col">
    <div class="card-header text-center">General Info</div>
      <div class="card-body">
        <form method="POST" action="/file/update/general-info/{{$file->id}}">
          {{ csrf_field()  }}
          {{ method_field('POST') }}    
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="named_insured">
                <p>Named Insured:</p> 
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->named_insured}}" name="named_insured" required><br>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="additional_ni">
                <p>Additional Named Insured/DBA:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->additional_ni}}" name="additional_ni"><br>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="entity_type">
                <p>Type of entitiy:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->entity_type}}" name="entity_type" required><br><br>
            </div>
          </div>
        </div>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="ssn">
                <p>SSN:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->ssn}}" name="ssn"><br>
            </div>
          </div>
        </div>            
        <hr>
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mailing_address_street_name_and_number">
                <p>Street name/number:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_street_name_and_number}}" name="mailing_address_street_name_and_number" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mailing_address_city">
                <p>City:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_city}}" name="mailing_address_city" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mailing_address_zip">
                <p>ZIP code:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_zip}}" name="mailing_address_zip" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mailing_address_county">
                <p>County:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_county}}" name="mailing_address_county" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="mailing_address_state">
                <p>State:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_state}}" name="mailing_address_state" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="location_address_street_name_and_number">
                <p>Street name/number:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->location_address_street_name_and_number}}" name="location_address_street_name_and_number" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="location_address_city">
                <p>City:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->location_address_city}}" name="location_address_city" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="location_address_zip">
                <p>ZIP code:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->location_address_zip}}" name="location_address_zip" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="location_address_county">
                <p>County:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->location_address_county}}" name="location_address_county" required><br>
            </div>
          </div>
        </div> 
        <div class="field">
          <div class="row">
            <div class="col">
              <label class="label" for="location_address_state">
                <p>State:</p>
              </label>
            </div>
            <div class="col">             
              <input type="text" value="{{$file->mailing_address_state}}" name="location_address_state" required><br>
            </div>
          </div>
        </div>
          
            <br>
            <button type="submit" class="btn btn-outline-secondary">Update</button>
        </form>
      </div>
    </div>
<!-- general info -->