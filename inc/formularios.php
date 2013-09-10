<section>
    <hgroup>
        <h1>Formulários</h1>
        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus nisi vitae sapien fringilla laoreet</h2>
    </hgroup>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus nisi vitae sapien fringilla laoreet. Suspendisse potenti. Vestibulum vel accumsan mi. Suspendisse potenti. Suspendisse facilisis sed augue non pharetra. 
    </p>

    <h2>Formulário</h2>
    <div class="exemplo">
        <form class="clearfix">
            <div class="coluna-3 sem-bordas">
	            <label>Label</label>
				<input type="text" placeholder="Input" required>
            </div>
            <div class="coluna-3 sem-bordas">
				<label>Label</label>
			    <input type="text" placeholder="Input Sucesso" pattern="[A-Za-z]{3}">
            </div>
        	<div class="coluna-3 sem-bordas">
		    	<label>Label</label>
				<input type="text" placeholder="Input Erro" pattern="[0-9]">
			</div>
            <div class="coluna-3 sem-bordas">
				<label>Label</label>
				<input type="text" placeholder="Input Desabilitado" class="desabilidado" disabled>
			</div>
            <div class="coluna-3 sem-bordas">
                <label>Label</label>
				<select required>
					<option>Select</option>
					<option>Select</option>
				</select>
            </div>
            <div class="coluna-3 sem-bordas">
				<label>Label</label>
            	<div class="radio">
                    <input type="radio" id="radio1" name="radio">
		            <label for="radio1">Interagi no mé, cursus quis, vehicula ac nisi.</label>
				</div>
				<div class="radio">
            		<input type="radio" id="radio2" name="radio">
					<label for="radio2">Interagi no mé, cursus quis, vehicula ac nisi.</label>
				</div>
            </div>
				<div class="coluna-3 sem-bordas">
					<label>Label</label>
					<textarea placeholder="Textarea" required></textarea>
				</div>
                <div class="coluna-3 sem-bordas">
					<label>Label</label>
					<div class="checkbox">
                        <input type="checkbox" id="checkbox1" name="checkbox">
						<label for="checkbox1">Interagi no mé, cursus quis, vehicula ac nisi.</label>
					</div>
                    <div class="checkbox">
						<input type="checkbox" id="checkbox2" name="checkbox">
						<label for="checkbox2">Interagi no mé, cursus quis, vehicula ac nisi.</label>
					</div>
				</div>
        </form>
        <pre class="prettyprint">
&lt;form&gt;
  
  &lt;!-- Input Padrão --&gt;
  &lt;div class="coluna-3"&gt;
    &lt;label&gt;Label&lt;/label&gt;
    &lt;input type="text" placeholder="Input" required&gt;
  &lt;/div&gt;

  &lt;!-- Input Padrão --&gt;
  &lt;div class="coluna-3"&gt;
    &lt;label&gt;Label&lt;/label&gt;
    &lt;input type="text" placeholder="Input Sucesso" &gt;
  &lt;/div&gt;

  &lt;div class="coluna-3"&gt;
    &lt;label&gt;Label&lt;/label&gt;
    &lt;input type="text" placeholder="Input Erro" &gt;
  &lt;/div&gt;

  &lt;div class="coluna-3"&gt;
    &lt;label&gt;Label&lt;/label&gt;
    &lt;input type="text" placeholder="Input Desabilitado" class="desabilidado" disabled&gt;
  &lt;/div&gt;
  
  &lt;div class="coluna-3"&gt;
    &lt;label&gt;Label&lt;/label&gt;
    &lt;select required&gt;
      &lt;option&gt;Select&lt;/option&gt;
      &lt;option&gt;Select&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;

  &lt;div class="coluna-3"&gt;
    &lt;label&gt;Label&lt;/label&gt;

    &lt;div class="radio"&gt;
      &lt;input type="radio" id="radio1" name="radio"&gt;
      &lt;label for="radio1"&gt;Interagi no mé, cursus quis, vehicula ac nisi.&lt;/label&gt;
    &lt;/div&gt;

    &lt;div class="radio"&gt;
      &lt;input type="radio" id="radio2" name="radio"&gt;
      &lt;label for="radio2"&gt;Interagi no mé, cursus quis, vehicula ac nisi.&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="coluna-3"&gt;
    &lt;label&gt;Label&lt;/label&gt;
    &lt;textarea placeholder="Textarea" required&gt;&lt;/textarea&gt;
  &lt;/div&gt;

  &lt;div class="coluna-3"&gt;
    &lt;label&gt;Label&lt;/label&gt;

    &lt;div class="checkbox"&gt;
      &lt;input type="checkbox" id="checkbox1" name="checkbox"&gt;
      &lt;label for="checkbox1"&gt;Interagi no mé, cursus quis, vehicula ac nisi.&lt;/label&gt;
    &lt;/div&gt;

    &lt;div class="checkbox"&gt;
      &lt;input type="checkbox" id="checkbox2" name="checkbox"&gt;
      &lt;label for="checkbox2"&gt;Interagi no mé, cursus quis, vehicula ac nisi.&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
        </pre> 
    </div>
</section>