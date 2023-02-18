<div class="col-lg-1">
  <div class="blog-details-social">
      <ul class="list-wrap">
          <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(\URL::current())}}&amp;src=sdkpreparse" 
            onclick="javascript:window.open(this.href, 'facebook-share-dialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
            title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://twitter.com/intent/tweet?url={{urlencode(\URL::current())}}"
            onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
            target="_blank" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{urlencode(\URL::current())}}"
            onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
            target="_blank" title="Share on LinkedIn"
            ><i class="fab fa-linkedin-in"></i></a></li>
          {{-- <li><a href="#"><i class="fab fa-behance"></i></a></li>
          <li><a href="#"><i class="fas fa-share"></i></a></li> --}}
      </ul>
  </div>
</div>