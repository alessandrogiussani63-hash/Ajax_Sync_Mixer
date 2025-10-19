// Load channels.json and populate legacy globals Links_1..Links_N for compatibility
(function(){
  window.CHANNELS = {};
  function setLegacyGlobals() {
    Object.keys(CHANNELS).forEach(function(k){
      var key = 'Links_' + k;
      window[key] = CHANNELS[k].html;
    });
  }
  function loadChannels(){
    return $.getJSON('channels.json').then(function(data){
      window.CHANNELS = data || {};
      setLegacyGlobals();
    });
  }
  // expose for manual reloads
  window.loadChannels = loadChannels;
  // simple helper to apply a channel by id
  window.applyChannel = function(ch){
    var c = CHANNELS && CHANNELS[ch];
    if (!c) { $('#cine').html('Channel '+ch+' not found'); return; }
    $('#cine').html(c.html);
  };
  // auto-load on ready
  $(loadChannels);
})();
