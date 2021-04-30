
<main>
    <section>

        <div class="text-center">
            <a href="index.php">
                <button class="btn btn-success">Voltar</button>
            </a>
            <h2 class="mt-2" class="font-monospace">Cadastrar Vaga</h2>

            <form method="post">  <!-- Inputs do formulário de cadastro -->

                <div class="input-group mb-3">
                    <span class="input-group-text">#</span>
                    <span class="input-group-text">ID</span>
                        <input type="number" class="border" aria-label="número ID" placeholder="0000" name="id">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Título</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Título do produto" name="titulo">
                </div>

                <div class="input-group">
                    <span class="input-group-text">Descrição</span>
                        <textarea class="form-control" aria-label="With textarea" placeholder="Descreva o produto" name="descricao"></textarea>
                </div>
                <hr>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Imagem</label>
                        <input type="file" class="form-control" id="inputGroupFile01" name="imagem">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Estoque</span>
                    <span class="input-group-text">un.</span>
                        <input type="number" class="border" aria-label="número Estoque" placeholder="Unidades em estoque" name="estoque" >
                </div>

                <div class="input-group">
                    <input type="submit" class="btn btn-success">
                </div>





            </form>
        </div>



    </section>
</main>