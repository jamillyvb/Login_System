<?php
//verificar se clicou no botao
if(isset($_POST['nome']))
{
	$nome = addslashes($_POST['nome']);
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['confSenha']);
	//verificar se esta preenchido
	if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
	{
		$u->conectar("tela_login","localhost","root","");
		if($u->msgErro == "")//se esta tudo ok
		{
			if($senha == $confirmarSenha)
			{
				if($u->cadastrar($nome,$telefone,$email,$senha))
				{
					?>
					<div id="msg-sucesso">
					Cadastrado com sucesso! Acesse para entrar!
					</div>
					<?php
				}
				else
				{
					?>
					<div class="msg-erro">
						Email ja cadastrado!
					</div>
					<?php
				}
			}
			else
			{
				?>
				<div class="msg-erro">
					Senha e confirmar senha não correspondem
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro;?>
			</div>
			<?php
		}
	}else
	{
		?>
		<div class="msg-erro">
			Preencha todos os campos!
		</div>
		<?php
	}
}


?>