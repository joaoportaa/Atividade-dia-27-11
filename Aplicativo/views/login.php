<div class="card" style="max-width: 448px; margin-left: auto; margin-right: auto;">
    <h2 class="text-center" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem;">Entrar</h2>
    
    <?php if(!empty($error)): ?>
        <script>alert("<?php echo $error; ?>");</script>
        <div class="alert-error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="index.php?page=login">
        <div class="form-group">
            <label class="form-label">E-mail</label>
            <input type="email" name="email" required class="form-input">
        </div>
        <div class="form-group">
            <label class="form-label">Senha</label>
            <input type="password" name="password" required class="form-input">
        </div>
        <button type="submit" class="btn-primary">Login</button>
    </form>
    <p class="text-center" style="margin-top: 1rem;">
        Não tem conta? <a href="index.php?page=cadastro" style="color: #3b82f6;">Cadastre-se</a>
    </p>
</div>