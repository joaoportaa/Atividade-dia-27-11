<div class="card" style="max-width: 448px; margin-left: auto; margin-right: auto;">
    <h2 class="text-center" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem;">Cadastro</h2>

    <?php if(!empty($error)): ?>
        <script>alert("<?php echo $error; ?>");</script>
        <div class="alert-error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="index.php?page=cadastro">
        <div class="form-group">
            <label class="form-label">Nome de Usuário</label>
            <input type="text" name="username" required class="form-input">
        </div>
        <div class="form-group">
            <label class="form-label">E-mail</label>
            <input type="email" name="email" required class="form-input">
        </div>
        <div class="form-group">
            <label class="form-label">Senha</label>
            <input type="password" name="password" required class="form-input">
        </div>
        <button type="submit" class="btn-primary" style="background-color: var(--accent-color); transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#059669';" onmouseout="this.style.backgroundColor='var(--accent-color)';">Cadastrar</button>
    </form>
</div>