         <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">SissyDigitalCard</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                   <a class="nav-item nav-link <?= $this->renderSection('menu-home') ?>" 
                            href='<?=base_url("/");?>'> Home </a>
                            <a class="nav-item nav-link <?= $this->renderSection('menu-about') ?>" 
                            href='<?=base_url("/about");?>'> About </a>
                            <a class="nav-item nav-link <?= $this->renderSection('menu-problemsolution') ?>" 
                            href='<?=base_url("/problemsolution");?>'>Problem Solution</a>
                            <a class="nav-item nav-link <?= $this->renderSection('menu-service') ?>" 
                            href='<?=base_url("/service");?>'> Service</a>
                            <a class="nav-item nav-link <?= $this->renderSection('menu-pricing') ?>" 
                            href='<?=base_url("/pricing");?>'>Pricing</a>
                            </div>
                            <a class="nav-item nav-link <?= $this->renderSection('menu-contact') ?>" 
                            href='<?=base_url("/contact");?>'> Contact </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
