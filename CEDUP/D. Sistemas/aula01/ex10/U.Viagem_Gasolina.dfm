object frm_principal: Tfrm_principal
  Left = 0
  Top = 0
  Caption = 'Combust'#237'vel gasto'
  ClientHeight = 279
  ClientWidth = 230
  Color = clBtnFace
  Font.Charset = ANSI_CHARSET
  Font.Color = clWindowText
  Font.Height = -15
  Font.Name = 'Times New Roman'
  Font.Style = [fsBold]
  OldCreateOrder = False
  Position = poDesktopCenter
  PixelsPerInch = 96
  TextHeight = 17
  object lb_Kilom: TLabel
    Left = 32
    Top = 32
    Width = 135
    Height = 17
    Caption = 'Dist'#226'ncia da viagem:'
  end
  object lb_Km: TLabel
    Left = 173
    Top = 58
    Width = 24
    Height = 17
    Caption = 'Km'
  end
  object lb_litro: TLabel
    Left = 32
    Top = 94
    Width = 146
    Height = 17
    Caption = 'Dist'#226'ncia(Km) p/ litro:'
  end
  object lb_L: TLabel
    Left = 173
    Top = 120
    Width = 10
    Height = 17
    Caption = 'L'
  end
  object lb_preco: TLabel
    Left = 32
    Top = 158
    Width = 146
    Height = 17
    Caption = 'Pre'#231'o do combust'#237'vel:'
  end
  object lb_cifra: TLabel
    Left = 173
    Top = 184
    Width = 19
    Height = 17
    Caption = 'R$'
  end
  object txt_Kg: TEdit
    Left = 32
    Top = 55
    Width = 135
    Height = 25
    TabOrder = 0
  end
  object txt_litro: TEdit
    Left = 32
    Top = 117
    Width = 135
    Height = 25
    TabOrder = 1
  end
  object txt_preco: TEdit
    Left = 32
    Top = 181
    Width = 135
    Height = 25
    TabOrder = 2
  end
  object btn_calcular: TButton
    Left = 40
    Top = 224
    Width = 104
    Height = 25
    Caption = 'Calcular'
    TabOrder = 3
    OnClick = btn_calcularClick
  end
end
