#include<stdio.h>

main(){

  float a,b;
  printf("\nNhap he so a: ");
  scanf("%f",&a);
  printf("\nNhap he so b: ");
  scanf("%f",&b);
  if(a==0){      //nếu a==0 thì
    if(b==0){    //nếu b==0 thì
      printf("\nPhuong trinh vo so nghiem");
    }else{       //nếu không thì (nếu b!=0 thì)
      printf("\nPhuong trinh vo nghiem");
    }
  }else{         //nếu không thì (nếu a!=0 thì)
    printf("\nPhuong trinh co nghiem x=%g",-b/a);
  }

  return 0;
}