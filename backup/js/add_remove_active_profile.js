let elements = [
    'profile',
    'edit_profile',
    'edit_account',
    'notification',
    'post',
    'project',
    'static'
  ].map(id => document.getElementById(id));
  
  let url = window.location.href;
  elements.forEach(element => element.classList.remove('active'));
  
  if (url.includes('profile.php')) {
    elements[0].classList.add('active');
  } else if (url.includes('profile_setting.php')) {
    elements[1].classList.add('active');
  } else if (url.includes('account_setting.php')) {
    elements[2].classList.add('active');
  } else if (url.includes('notification.php')) {
    elements[3].classList.add('active');
  } else if (url.includes('post.php')) {
    elements[4].classList.add('active');
  }else if (url.includes('project.php')) {
    elements[5].classList.add('active');
  }else if (url.includes('static.php')){
   elements[6].classList.add('active');
  };

