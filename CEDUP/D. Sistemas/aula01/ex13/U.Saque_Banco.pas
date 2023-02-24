unit U.Saque_Banco;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  Tfrm_principal = class(TForm)
    lb_saque: TLabel;
    txt_saque: TEdit;
    btn_calcular: TButton;
    lb_duzen: TLabel;
    txt_duzen: TEdit;
    lb_cifra1: TLabel;
    lb_cem: TLabel;
    txt_cem: TEdit;
    lb_cifra2: TLabel;
    lb_cinq: TLabel;
    txt_cinq: TEdit;
    lb_cifra3: TLabel;
    lb_vint: TLabel;
    txt_vint: TEdit;
    lb_cifra4: TLabel;
    lb_dez: TLabel;
    txt_dez: TEdit;
    lb_cifra5: TLabel;
    lb_cin: TLabel;
    txt_cin: TEdit;
    lb_cifra6: TLabel;
    lb_dois: TLabel;
    txt_dois: TEdit;
    lb_cifra7: TLabel;
    lb_um: TLabel;
    txt_um: TEdit;
    lb_cifra8: TLabel;
    lb_cent: TLabel;
    txt_cent: TEdit;
    lb_cifra9: TLabel;
    lb_cifra10: TLabel;
    procedure btn_calcularClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  frm_principal: Tfrm_principal;

implementation

{$R *.dfm}

procedure Tfrm_principal.btn_calcularClick(Sender: TObject);
var
duz,cem,cinq,vint,dez,cinc,dois,um:integer;
saque,cent:double;
begin
  saque:=strtoFloat(txt_saque.text);
  duz:=0;
  cem:=0;
  cinq:=0;
  vint:=0;
  dez:=0;
  cinc:=0;
  dois:=0;
  um:=0;
  cent:=0;
  while(saque<>0)do
  begin

   if(saque>=200)then
   begin
     saque:=saque-200;
     duz:=duz+1;
   end;

     if(saque>=100)and(saque<200)then
     begin
     saque:=saque-100;
     cem:=cem+1;
     end;

       if(saque>=50)and(saque<100)then
       begin
         saque:=saque-50;
         cinq:=cinq+1;
       end;

         if(saque>=20)and(saque<50)then
         begin
           saque:=saque-20;
           vint:=vint+1;
         end;

           if(saque>=10)and(saque<20)then
           begin
             saque:=saque-10;
             dez:=dez+1;
           end;

             if(saque>=5)and(saque<10)then
             begin
               saque:=saque-5;
               cinc:=cinc+1;
             end;

               if(saque>=2)and(saque<5)then
               begin
                 saque:=saque-2;
                 dois:=dois+1;
               end;

                 if(saque>=1)and(saque<2)then
                 begin
                   saque:=saque-1;
                   um:=um+1;
                 end;

                   if(saque<1)then
                   begin
                     cent:=saque;
                     saque:=saque-cent;
                   end;


   end;

   txt_duzen.text:=inttostr(duz);
   txt_cem.text:=inttostr(cem);
   txt_cinq.text:=inttostr(cinq);
   txt_vint.text:=inttostr(vint);
   txt_dez.text:=inttostr(dez);
   txt_cin.text:=inttostr(cinc);
   txt_dois.text:=inttostr(dois);
   txt_um.text:=inttostr(um);
   txt_cent.text:=formatfloat('0.00',cent);

end;

end.
