<?php

class ContactRenderer {

	public function Render() {
		
        return <<<EOL
        <h3>Adress</h3>
        <p>Carlos Cota Castro<br>
        <adress>
            Worringer Straße 87<br>
            40211 Düsseldorf</adress>
        </p>
        
        <p class="contacts">
        {$this->RenderPhoneIcon()} +49 176 / 246 227 15<br>
        @ <a href="mailto:carloscotacastro@icloud.com">carloscotacastro@icloud.com</a>
        </p>
        
EOL;
	}
    
    private function RenderPhoneIcon() : string {
        return
            '<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="icon">'
            . '<path fill="currentColor" d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z">'
            . '</path>'
            . '</svg>'
        ;
    }

}