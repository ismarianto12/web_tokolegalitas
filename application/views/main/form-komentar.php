
<legend>Komentar Form</legend>        
  <form id="komentar-form">
            <div class="form-group">
              <input type="text" class="form-control form-komentar" required="required" placeholder="Name" name="name-input" id="name-input" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-komentar" required="required" placeholder="Email address" name="email-input" id="email-input" />
              </div>
              <div class="form-group">
              <input type="text" class="form-control form-komentar" required="required" placeholder="URL" name="url-input" id="url-input" />
              </div>
            <div class="form-group">
              <textarea name="content-input" id="content-input" required="required" class="form-control form-komentar" rows="4" placeholder="Koment"></textarea>
            </div>
            <div class="form-group">
              <input type="hidden" id="key-input" name="key-input" value="id" >
              <input type="hidden" id="value-input" name="value-input" value="0" >
              <input type="hidden" id="type-input" name="type-input" value="komentar" >
              <button type="submit" class="btn btn-primary" onclick="proccess(); return false;">Publish</button>
            </div>
          </form>
        </div>
      