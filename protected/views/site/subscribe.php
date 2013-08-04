				<h1>Katılım Formu</h1>
				<br />
				<span>onsequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
				<br />
				<br />
				<form id="subscribe">
					<div class="appform">
						<label class="formtext" for="user-name">Ad Soyad </label>
						<input class="inputbox" name="user-name" id="user-name" type="text" value="<?=$name?>"/>
					</div>		
					<div class="appform">
						<label class="formtext" for="user-phone">Telefon </label>
						<input class="inputbox" name="user-phone" id="user-phone" type="text" value="0 (599) 999 99 99" />
					</div>		
					<div class="appform">
						<label class="formtext" for="user-mail">E-Mail </label>
						<input class="inputbox" name="user-mail" id="user-mail" type="text" value="<?=$email;?>" />
					</div>
					<div class="clear"></div>
					<label class="check-text">
						<input id="checkbox" type="checkbox" name="terms" checked="checked"/> Katılım koşullarını okudum, kabul ediyorum.
					</label> 
				</form>
				<div class="clear"></div>
				<div id="logingo" class="button"><span>Katıl</span></div>
