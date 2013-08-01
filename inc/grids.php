<section>
    <hgroup>
        <h1>Grade Responsiva</h1>
        <h2>Criada com o intuito de facilitar a construção estrutural da aplicação web.</h2>
    </hgroup>

    <p>
        Confira abaixo alguns exemplos e códigos necessários para que a utilização deste componente
        seja eficiente.
    </p>

    <h2>Grade Padrão</h2>

    <div class="exemplo">
        <div class="linha">
            <div class="coluna-12">12</div>
        </div>

        <div class="linha">
            <div class="coluna-11">11</div>
            <div class="coluna-1">1</div>
        </div>

        <div class="linha">
            <div class="coluna-10">10</div>
            <div class="coluna-2">2</div>
        </div>

        <div class="linha">
            <div class="coluna-9">9</div>
            <div class="coluna-3">3</div>
        </div>

        <div class="linha">
            <div class="coluna-8">8</div>
            <div class="coluna-4">4</div>
        </div>

        <div class="linha">
            <div class="coluna-7">7</div>
            <div class="coluna-5">5</div>
        </div>

        <div class="linha">
            <div class="coluna-6">6</div>
            <div class="coluna-6">6</div>
        </div>

        <pre class="prettyprint">
&lt;div class="linha"&gt;
    &lt;div class="coluna-12"&gt;12&lt;/div&gt;
&lt;/div&gt;

&lt;div class="linha"&gt;
    &lt;div class="coluna-11"&gt;11&lt;/div&gt;
    &lt;div class="coluna-1"&gt;1&lt;/div&gt;
&lt;/div&gt;

&lt;div class="linha"&gt;
    &lt;div class="coluna-10"&gt;10&lt;/div&gt;
    &lt;div class="coluna-2"&gt;2&lt;/div&gt;
&lt;/div&gt;

&lt;div class="linha"&gt;
    &lt;div class="coluna-9"&gt;9&lt;/div&gt;
    &lt;div class="coluna-3"&gt;3&lt;/div&gt;
&lt;/div&gt;

&lt;div class="linha"&gt;
    &lt;div class="coluna-8"&gt;8&lt;/div&gt;
    &lt;div class="coluna-4"&gt;4&lt;/div&gt;
&lt;/div&gt;

&lt;div class="linha"&gt;
    &lt;div class="coluna-7"&gt;7&lt;/div&gt;
    &lt;div class="coluna-5"&gt;5&lt;/div&gt;
&lt;/div&gt;

&lt;div class="linha"&gt;
    &lt;div class="coluna-6"&gt;6&lt;/div&gt;
    &lt;div class="coluna-6"&gt;6&lt;/div&gt;
&lt;/div&gt;
        </pre>
    </div>


    <h2>Modelos para Layouts</h2>
    
    <div class="exemplo">
        <div class="linha">
            <div class="coluna-12">Topo</div>
        </div>

        <div class="linha">
            <div class="coluna-3">Navegação Lateral</div>
            <div class="coluna-9">Principal</div>
        </div>

        <div class="linha">
            <div class="coluna-12">Rodapé</div>
        </div>


        <pre class="prettyprint">
&lt;div class="linha"&gt;
   &lt;div class="coluna-12"&gt;Topo&lt;/div&gt;
&lt;/div&gt;

&lt;div class="linha"&gt;
   &lt;div class="coluna-3"&gt;Navegação Lateral&lt;/div&gt;
   &lt;div class="coluna-9"&gt;Principal&lt;/div&gt;
&lt;/div&gt;

&lt;div class="linha"&gt;
   &lt;div class="coluna-12"&gt;Rodapé&lt;/div&gt;
&lt;/div&gt;
        </pre>
    </div>
</section>