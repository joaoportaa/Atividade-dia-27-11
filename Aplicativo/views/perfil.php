<div class="profile-header">
    <h2 class="profile-title">Olá, <?php echo $_SESSION['user']['username']; ?>!</h2>
    <p style="color: #6b7280;">Gerencie seus estudos abaixo.</p>
</div>



<div class="add-block-area">
    <h3 style="font-weight: bold;">Novo Bloco de Estudo</h3>
    <form method="POST" style="display: flex; gap: 0.5rem; flex-grow: 1;">
        <select name="subject" class="form-select" style="flex-grow: 1;">
            <option value="Português">Português</option>
            <option value="Matemática">Matemática</option>
            <option value="Inglês">Inglês</option>
        </select>
        <button type="submit" name="add_block" class="btn-primary" style="width: auto; padding: 0.5rem 1rem;">Criar</button>
    </form>
</div>




<div class="block-grid">
    <?php foreach($blocks as $block): ?>
        <div class="study-block">
            <div class="block-header">
                <h4 class="block-subject"><?php echo htmlspecialchars($block['subject']); ?></h4>
                <form method="POST" onsubmit="return confirm('Excluir este bloco?');">
                    <input type="hidden" name="block_id" value="<?php echo $block['id']; ?>">
                    <button type="submit" name="delete_block" class="btn-delete">X</button>
                </form>
            </div>
            
            <form method="POST">
                <input type="hidden" name="block_id" value="<?php echo $block['id']; ?>">
                <textarea name="notes" rows="5" class="form-textarea block-notes" placeholder="Escreva aqui..."><?php echo htmlspecialchars($block['notes']); ?></textarea>
                <button type="submit" name="save_notes" class="btn-save">Salvar Anotações</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>

<?php if(empty($blocks)): ?>
    <p class="text-center" style="color: #6b7280; margin-top: 2rem;">Nenhum bloco de estudo criado ainda.</p>
<?php endif; ?>