<?php

abstract class myClassGenerator {

    protected $ClassName;
    
    private $Path;

    abstract protected function getNeededVarsString(): string;

    function __construct($ClassName) {
        $this->ClassName = $ClassName;
        $this->Path = $this->getPath();
    }

    public function MakeClassFile() {
        $this->MakeAppFile();
        $this->MakeTestFile();
    }
    
    protected function MakeAppFile() {
        $this->putFile($this->getTemplate(),
                BASE_DIR . '/' . $this->getPath() .'/'. $this->getFileName() . '.php'
        );
    }

    public function setPath(string $s) {
        $this->Path = $s;
    }

    
    public function MakeTestFile() {
        $o = new Test($this->getClassName());
        $this->putFile($o->getTemplate(),
                BASE_DIR . '/tests/' . $this->getPath() .'/'. $this->getFileName() . 'Test.php'
        );
    }

    protected function putFile($content, $file_path) {
        
        if (!file_exists($file_path)) {
            echo Success('File was created: ' . $file_path) . "\n";
            $path = dirname($file_path);
            if (!is_dir($path)) {
                mkdir($path);
            }
            file_put_contents($file_path, '<?php' . "\n\n" . $content);
        } else {
            echo Note('File already exists: ' . $file_path) . "\n";
        }
    }

 

    protected function getFileName() {
        return $this->getClassName();
    }
    
    
    
    protected function getClassName() {
        return
                $this->getPrefix()
                . $this->ClassName
                . $this->getSuffix()
        ;
    }

    public function getTemplate() {
        $cn = $this->getClassName();
        return
                'class ' . $cn
                . $this->getExtendsString()
                . $this->getImplementsString()
                . ' {' . "\n"
                . $this->getNeededVarsString()
                . '}'
        ;
    }

    protected function getExtendsString() {
        return
                ($this->ExtendsClass() != '') ? ' extends \\' . $this->ExtendsClass() : ''
        ;
    }

    protected function getImplementsString() {
        $ret = $this->ImplementsInterface();
        return ($ret  != '')
                ? ' implements \\' . $this->ImplementsInterface()
                : ''
        ;
    }
    
  
}
