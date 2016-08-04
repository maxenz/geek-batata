<?php /*%%SmartyHeaderCode:2442957a3b1f64a1141-11591236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95eeb7b25358280d311e60256eb3b5688b1d33ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockcms\\blockcms.tpl',
      1 => 1466013674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2442957a3b1f64a1141-11591236',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a3b8a9d232c4_20971108',
  'has_nocache_code' => true,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a3b8a9d232c4_20971108')) {function content_57a3b8a9d232c4_20971108($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Información</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://localhost:8080/prestashop/bajamos-precios" title="Promociones especiales">
						Promociones especiales
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8080/prestashop/nuevos-productos" title="Novedades">
					Novedades
				</a>
			</li>
										<li class="item">
					<a href="http://localhost:8080/prestashop/mas-vendido" title="¡Lo más vendido!">
						¡Lo más vendido!
					</a>
				</li>
										<li class="item">
					<a href="http://localhost:8080/prestashop/tiendas" title="Nuestras tiendas">
						Nuestras tiendas
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8080/prestashop/contactanos" title="Contacte con nosotros">
					Contacte con nosotros
				</a>
			</li>
															<li class="item">
						<a href="http://localhost:8080/prestashop/content/3-terminos-y-condiciones-de-uso" title="Términos y condiciones">
							Términos y condiciones
						</a>
					</li>
																<li class="item">
						<a href="http://localhost:8080/prestashop/content/4-sobre-nosotros" title="Sobre nosotros">
							Sobre nosotros
						</a>
					</li>
													<li>
				<a href="http://localhost:8080/prestashop/mapa-web" title="Mapa del sitio">
					Mapa del sitio
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
