object frm_principal: Tfrm_principal
  Left = 0
  Top = 0
  Caption = 'Restaurante BemB'#227'o'
  ClientHeight = 284
  ClientWidth = 187
  Color = clBtnFace
  Font.Charset = ANSI_CHARSET
  Font.Color = clWindowText
  Font.Height = -15
  Font.Name = 'Times New Roman'
  Font.Style = [fsBold]
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 17
  object lbpeso: TLabel
    Left = 24
    Top = 24
    Width = 112
    Height = 17
    Caption = 'Peso da refei'#231#227'o:'
  end
  object lbpagar: TLabel
    Left = 24
    Top = 96
    Width = 42
    Height = 17
    Caption = 'Pagar:'
  end
  object lbcifra: TLabel
    Left = 151
    Top = 119
    Width = 19
    Height = 17
    Caption = 'R$'
  end
  object lbkilo: TLabel
    Left = 151
    Top = 47
    Width = 20
    Height = 17
    Caption = 'Kg'
  end
  object lb_aviso1: TLabel
    Left = 24
    Top = 208
    Width = 106
    Height = 17
    Caption = 'A refei'#231#227'o est'#225
    Font.Charset = ANSI_CHARSET
    Font.Color = clMaroon
    Font.Height = -7
    Font.Name = 'Sans Serif Collection'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object lb_aviso2: TLabel
    Left = 24
    Top = 231
    Width = 62
    Height = 17
    Caption = 'R$ 28,00'
    Font.Charset = ANSI_CHARSET
    Font.Color = clMaroon
    Font.Height = -7
    Font.Name = 'Sans Serif Collection'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object lb_aviso3: TLabel
    Left = 24
    Top = 254
    Width = 132
    Height = 17
    Caption = 'para cada Kilo (Kg).'
    Font.Charset = ANSI_CHARSET
    Font.Color = clMaroon
    Font.Height = -7
    Font.Name = 'Sans Serif Collection'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object txtpeso: TEdit
    Left = 24
    Top = 47
    Width = 121
    Height = 25
    TabOrder = 0
  end
  object txtpagar: TEdit
    Left = 24
    Top = 119
    Width = 121
    Height = 25
    Enabled = False
    TabOrder = 1
  end
  object btcalcular: TButton
    Left = 24
    Top = 160
    Width = 75
    Height = 25
    Caption = 'Calcular'
    TabOrder = 2
    OnClick = btcalcularClick
  end
end
