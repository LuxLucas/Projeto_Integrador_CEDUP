unit U.desconto;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  Tfrm_principal = class(TForm)
    lb_valor: TLabel;
    txt_valor: TEdit;
    btn_calcular: TButton;
    lb_vista: TLabel;
    txt_vista: TEdit;
    lb_v5x: TLabel;
    txt_v5x: TEdit;
    lb_v10x: TLabel;
    txt_v10x: TEdit;
    procedure btn_calcularClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  frm_principal: Tfrm_principal;
  valor,v5x,v10x,vista:double;

implementation

{$R *.dfm}

procedure Tfrm_principal.btn_calcularClick(Sender: TObject);
begin
   valor:=strtofloat(txt_valor.text);
   v5x:=valor/5;
   vista:=valor*0.9;
   v10x:=(valor*1.2)/10;
   showmessage('A vista: '+floattostr(vista)+#13+' Em 5x: '+floattostr(v5x)+#13+' Com juros em 10x: '+floattostr(v10x));
   txt_vista.Text:=floattostr(vista);
   txt_v5x.Text:=floattostr(v5x);
   txt_v10x.Text:=floattostr(v10x)
end;

end.
