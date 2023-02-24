unit U.formulas;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  Tfrm_principal = class(TForm)
    lb_a: TLabel;
    txt_a: TEdit;
    lb_b: TLabel;
    txt_b: TEdit;
    lb_c: TLabel;
    txt_c: TEdit;
    btn_calcular: TButton;
    procedure btn_calcularClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  frm_principal: Tfrm_principal;
  a,b,c:integer;
  d,r,s:double;

implementation

{$R *.dfm}

procedure Tfrm_principal.btn_calcularClick(Sender: TObject);
begin
  a:=strtoint(txt_a.text);
  b:=strtoint(txt_b.text);
  c:=strtoint(txt_c.text);
  r:=(a+b)*(a+b);
  s:=(b+c)*(b+c);
  d:=(r+s)/2;
  showmessage('O resultado será: '+FloatToStr(d));
end;

end.
