unit U.dias_de_vida;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  Tfrm_principal = class(TForm)
    lb_nome: TLabel;
    txt_nome: TEdit;
    lb_anos: TLabel;
    txt_anos: TEdit;
    btn_calcular: TButton;
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
 nome:string;
 anos:integer;

begin
  nome:= txt_nome.Text;
  anos:= StrToInt(txt_anos.Text);
  Showmessage(nome+', VOCÊ JÁ VIVEU '+IntToStr(anos*365)+' dias');
end;

end.
