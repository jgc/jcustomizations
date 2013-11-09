<!-- Content container footer section -->
     <?php if ($this->countModules('position-9') || $this->countModules('position-10') || $this->countModules('position-11')) : ?>   
     <hr />
     <div id="lineB" class="row-fluid">
        <div id="content" class="span4" align="middle">
            <jdoc:include type="modules" name="position-9" style="xhtml" />
        </div>
        <div id="content" class="span4" align="middle">
          <jdoc:include type="modules" name="position-10" style="xhtml" />
        </div>
        <div id="content" class="span4" align="middle">
          <jdoc:include type="modules" name="position-11" style="xhtml" />
        </div>
     </div>
     <?php endif; ?>
<!-- End Content container footer section -->