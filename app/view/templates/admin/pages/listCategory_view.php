 		<?if(!empty($arResult)):?>
				<?foreach($arResult as $item):?>
				 <div class="col-md-4">
					<div class="card mb-4 shadow-sm">
			            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"></rect><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
			            <div class="card-body">
			              <p class="card-text"> краткое описание </p>
			              <div class="d-flex justify-content-between align-items-center">
			                <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
			                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
			                </div>
			                <small class="text-muted">9 статей </small>
			              </div>
			            </div>
			          </div>
			         </div>
				<?endforeach?>
 		<?endif?>